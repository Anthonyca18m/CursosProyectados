import styled from 'styled-components'

const StyledButton = styled.button`
    background-color: ${props => props.blue ? 'blue' : 'gray'};
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;

    &:hover {
        background-color: ${props => props.blue ? 'darkblue' : 'darkgray'};
    }
`

const Button = ({ children, blue }) => {
    return <StyledButton blue={blue}>{ children }</StyledButton>
}

export default Button