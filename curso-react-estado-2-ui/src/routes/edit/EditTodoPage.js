import React from "react";

import { TodoForm } from '../../ui/TodoForm';
import { useTodos } from '../useTodos';

function EditTodoPage() {

    const { state, stateUpdaters } = useTodos();
    const { editTodo } = stateUpdaters;

    return (
        <div>
        <h1>Edit Todo Page</h1>
        <TodoForm
            labelForm="Escribe tu TODO"
            submitLabel="Guardar Cambios"
            submitEvent={() => editTodo}
          />
        </div>
    );
}

export { EditTodoPage };