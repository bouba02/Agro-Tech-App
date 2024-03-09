import pandas as pd
import numpy as np
import json
import sys
#import joblib 
# Assurez-vous 
try:
    #Récupération des données saisies 
    jsonn = sys.argv[1]
    jsonp = sys.argv[2]
    jsonk = sys.argv[3]
    jsont = sys.argv[4]
    jsonh = sys.argv[5]
    jsonph = sys.argv[6]
    jsonr = sys.argv[7]
except json.JSONDecodeError as e:
    print("Erreur de décodage JSON :", e)
    sys.exit(1) 
 # Arrêter le script en cas d'erreur

#Analysons les chaînes JSON en objets Python
n_params = json.loads(jsonn)
p_params = json.loads(jsonp)
k_params = json.loads(jsonk)
t_params = json.loads(jsont)
h_params = json.loads(jsonh)
ph_params = json.loads(jsonph)
r_params = json.loads(jsonr)

#Lecture de notre dataset
df = pd.read_csv('/Applications/MAMP/htdocs/agriculture-portal-main/farmer/recommendation_culture.csv')

traduction_label = {
    'rice': 'riz',
    'maize': 'maïs',
    'jute': 'jute',
    'cotton': 'coton',
    'coconut': 'noix de coco',
    'papaya': 'papaye',
    'orange': 'orange',
    'apple': 'pomme',
    'muskmelon': 'melon',
    'watermelon': 'pastèque',
    'grapes': 'raisins',
    'mango': 'mangue',
    'banana': 'banane',
    'pomegranate': 'grenade',
    'lentil': 'lentille',
    'blackgram': 'gram noir',
    'mungbean': 'haricot mungo',
    'mothbeans': 'haricot papillon',
    'pigeonpeas': 'pois d\'Angole',
    'kidneybeans': 'haricot rouge',
    'chickpea': 'pois chiche',
    'coffee': 'café'
}
df['label'] = df['label'].replace(traduction_label)


#divisons le dataset en ensemble d'entraînement et de test
X = df.drop(['label'], axis = 1)
y = df['label']

from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)

#Entrainement du model avec l'algorithme de RandomForest
from sklearn.ensemble import RandomForestClassifier
classifier = RandomForestClassifier(n_estimators = 10, criterion = 'entropy', random_state = 0)
X_train = X_train.values  # Supprime les noms de caractéristiques
classifier.fit(X_train, y_train)

#Récupération des valeurs saisi par l'utisalteur et stockage dans un tableau.
#user_input = np.array([[90,42,43,21,82,6.5,203]]) - ans is rice.
user_input = np.array([[n_params,p_params,k_params,t_params,h_params,ph_params,r_params]])

#Prédisons en utilisant le modèle entraîné.
predictions = classifier.predict(user_input)

#Affichage de la prédiction 
print(str(predictions[0]))
