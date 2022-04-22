import { reactive, watch } from '@vue/composition-api';
const API_KEY = '######'; //reemplazar con api cuando la reciba

export const useMovieApi = () => {
    const state = reactive({
        search: 'Dune',
        loading: true,
        movies: []
    });

    watch(() => {
        const OMDB_API = `https://www.omdbapi.com/?s=${state.search}&apikey=${API_KEY}`;//reemplazar aca tambien
        fetch(OMDB_API)
          .then(response => response.json())
            .then(jsonResponse => {
                state.movies = jsonResponse.Search;
                state.loading = false;
            });
    });
    return state;
};