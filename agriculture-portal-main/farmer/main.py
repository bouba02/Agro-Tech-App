from fastapi import FastAPI
from pydantic import BaseModel
import joblib
app = FastAPI()

class CropInput(BaseModel):
    n: int
    p: int
    k: int
    t: float
    h: float
    ph: float
    r: float
@app.post("/predict")
def predict_crop(input_data: CropInput):
    # Charger le modèle pré-entrainé
    model = joblib.load("ML/crop_recommendation/recommandation_culture.pkl")

    # Effectuer des prédictions
    user_input = [input_data.n, input_data.p, input_data.k, input_data.t, input_data.h, input_data.ph, input_data.r]
    prediction = model.predict([user_input])

    return {"predicted_crop": prediction[0]}
