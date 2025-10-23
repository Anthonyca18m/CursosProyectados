export const logger = store => next => action => {
    console.log('Dispatching action:', action)
    next(action)
}

export const featuring = store => next => action => {
    const newPayload = action.action.payload.map(item => ({...item, name: `Poke-${item.name}`}))
    const updatedAction = {...action, action: {...action.action, payload: newPayload}}
    next(updatedAction)  
}