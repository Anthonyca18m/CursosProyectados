import React from "react";

import { TodoForm } from '../../ui/TodoForm';
import { useTodos } from '../useTodos';

function NewTodoPage() {

    const { state, stateUpdaters } = useTodos();
    const { addTodo } = stateUpdaters;

    return (
        <div>
        <h1>New Todo Page</h1>
        <TodoForm
            labelForm="Escribe tu nuevo TODO"
            submitLabel="Agregar"
            submitEvent={(e) => addTodo(e)}
          />
        </div>
    );
}

export { NewTodoPage };