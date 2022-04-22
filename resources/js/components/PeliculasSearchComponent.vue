<template>
    <form class="search">
        <input
            type="text"
            :value="Titulo"
            @keyup="handleChange"
        />
        <input id="searchfor"  @click="handleSubmit" type="submit" value="Buscar" />
    </form>
</template>

<script>
import { ref } from '@vue/composition-api';

export default {
    name: 'Search',
    props: ['search'],
    setup({ search }, { emit }) {
        const Titulo = ref(search);
        return {
            Titulo,
            handleSubmit(event) {
                event.preventDefault();
                emit('search', Titulo.value);
            },
            handleChange(event) {
                Titulo.value = event.target.value
            }
        }
    }
}
</script>