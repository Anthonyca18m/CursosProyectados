import React from "react";

import { TodoForm } from '../../ui/TodoForm';
import { useTodos } from '../useTodos';
import { useLocation, useParams } from "react-router-dom";

function EditTodoPage() {

    const location = useLocation();

    const { state, stateUpdaters } = useTodos();
    const { loading } = state;
    const { editTodo, getEditTodo } = stateUpdaters;

    const { id } = useParams();
    const modelId = Number(id);

    let editText;

    if (location.state?.todo) {
        editText = location.state.todo.text;
    } else if (loading) {
        return <h1>cargando</h1>;
    } else {
        const todo = getEditTodo(modelId);
        editText = todo.text;
    }

    return (
        <div>
            <h1>Edit Todo Page</h1>
            <TodoForm
                labelForm="Escribe tu TODO"
                submitLabel="Guardar Cambios"
                defaultValue={editText}
                submitEvent={(newText) => editTodo(modelId, newText)}
            />
        </div>
    );
}

export { EditTodoPage };