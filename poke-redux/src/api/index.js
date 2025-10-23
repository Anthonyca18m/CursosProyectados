
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

export const getPokemonDetail = async (url) => {
    try {
        const response = await fetch(url);
        const data = await response.json();

        return data;
    } catch (error) {
        console.error('Error fetching pokemon detail:', error);
        return null;        
    }
}