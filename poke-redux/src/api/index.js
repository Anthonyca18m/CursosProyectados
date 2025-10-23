
const API_URL = 'https://pokeapi.co/api/v2/pokemon?limit=10';


export const getPokemons = async () => {
    try {
        const response = await fetch(API_URL);
        const data = await response.json();

        return data.results;
    } catch (error) {
        console.error('Error fetching pokemons:', error);
        return [];        
    }
}