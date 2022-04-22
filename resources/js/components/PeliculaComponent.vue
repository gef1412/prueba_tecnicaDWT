<template>

    <div class="movie border border-secondary rounded" >
      <h2>{{ movie.Title }}</h2>
        <div v-if="movie.Poster === 'N/A'">
           <p>Imagen no Disponible</p>
        </div>   
        <div v-else> 
            <img class="rounded" width="200" :alt="altText" :src="movie.Poster" />
        </div>
        <p class="font-weight-bold mt-3">Año: {{ movie.Year }}</p>
    </div>
</template>

<script>
import { computed } from '@vue/composition-api';
    
export default {
    name: "Movie",
    props: ['movie'],
    setup({ movie }) {
        const altText = computed(() => `Titulo: ${movie.Title}`);
        return { altText };
    }
};

</script>