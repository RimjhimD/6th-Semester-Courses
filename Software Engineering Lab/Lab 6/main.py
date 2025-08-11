from fastapi import FastAPI, HTTPException
from pydantic import BaseModel
from typing import List

app = FastAPI()

class TodoItem(BaseModel):
    id: int
    task: str
    done: bool = False

# In-memory "database"
todos: List[TodoItem] = []

@app.get("/")
def root():
    return {"message": "Hello, FastAPI!"}

# Get all todos
@app.get("/todos", response_model=List[TodoItem])
def get_todos():
    return todos

# Add a new todo
@app.post("/todos", response_model=TodoItem)
def add_todo(todo: TodoItem):
    
    # Check if ID already exists
    for t in todos:
        if t.id == todo.id:
            raise HTTPException(status_code=400, detail="ID already exists")
    todos.append(todo)
    return todo

# Update a todo
@app.put("/todos/{todo_id}", response_model=TodoItem)
def update_todo(todo_id: int, updated_todo: TodoItem):
    for index, todo in enumerate(todos):
        if todo.id == todo_id:
            todos[index] = updated_todo
            return updated_todo
    raise HTTPException(status_code=404, detail="Todo not found")

# Delete a todo
@app.delete("/todos/{todo_id}")
def delete_todo(todo_id: int):
    for index, todo in enumerate(todos):
        if todo.id == todo_id:
            todos.pop(index)
            return {"detail": "Deleted"}
    raise HTTPException(status_code=404, detail="Todo not found")

