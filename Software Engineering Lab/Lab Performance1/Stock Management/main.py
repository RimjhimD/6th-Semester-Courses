from fastapi import FastAPI
from pydantic import BaseModel, Field
from typing import List

class Product(BaseModel):
    id: int
    name: str
    description: str
    price: int = Field(ge=0, description="Price must be zero or positive")
    quantity: int = Field(ge=0, description="Quantity must be zero or positive")

app = FastAPI()
products: List[Product] = []

@app.get("/get")
def get_products():
    return {"message": "Products retrieved successfully", "data": products}

@app.get("/get/{product_id}")
def get_product(product_id: int):
    for product in products:
        if product.id == product_id:
            return {"message": "Product found", "data": product}
    return {"message": "Product not found"}

@app.post("/post")
def add_product(product: Product):
    for p in products:
        if p.id == product.id:
            return {"message": "Product with this ID already exists"}
    products.append(product)
    return {"message": "Product added", "data": product}

@app.put("/put/{product_id}")
def update_product(product_id: int, updated_product: Product):
    for index, product in enumerate(products):
        if product.id == product_id:
            products[index] = updated_product
            return {"message": "Product updated", "data": updated_product}
    return {"message": "Product not found"}

@app.delete("/delete/{product_id}")
def delete_product(product_id: int):
    for index, product in enumerate(products):
        if product.id == product_id:
            deleted = products.pop(index)
            return {"message": "Product deleted", "data": deleted}
    return {"message": "Product not found"}
