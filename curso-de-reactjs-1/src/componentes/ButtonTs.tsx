import React from "react"

type ButtonTsProps = {
    onclick: () => void
    label: string | number
}

function ButtonTs({onclick, label} : ButtonTsProps) {
    return (
        <button onClick={onclick}>{label}</button>
    )
}

export default ButtonTs