import React from 'react';
import './TodoForm.css';
import { useNavigate } from 'react-router-dom';

function TodoForm(props) {
  const [newTodoValue, setNewTodoValue] = React.useState('');

  const navigate = useNavigate();

  const onChange = (event) => {
    setNewTodoValue(event.target.value);
  };
  const onCancel = () => {
    navigate('/');
  };
  const onSubmit = (event) => {
    event.preventDefault();
    props.submitEvent(newTodoValue);
    navigate('/');
  };

  return (
    <form onSubmit={onSubmit}>
      <label>{ props.labelForm }</label>
      <textarea
        value={newTodoValue}
        onChange={onChange}
        placeholder="Cortar la cebolla oara el almuerzo"
      />
      <div className="TodoForm-buttonContainer">
        <button
          type="button"
          className="TodoForm-button TodoForm-button--cancel"
          onClick={onCancel}
          >
          Cancelar
        </button>
        <button
          type="submit"
          className="TodoForm-button TodoForm-button--add"
        >
          { props.submitLabel }
        </button>
      </div>
    </form>
  );
}

export { TodoForm };
