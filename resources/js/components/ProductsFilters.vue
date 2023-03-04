<template>
    <form class="products-form">
        <div class="form-element">
            <label for="name">Наименование</label>
            <input type="text" id="name"
                   v-model="filters.title"
                   @input="filter">
        </div>
        <div class="form-element">
            <label for="code">Код</label>
            <input type="text" id="code"
                   v-model="filters.code"
                   @input="filter">
        </div>
        <div class="form-element">
            <label for="color">Цвет</label>
            <input type="text" id="color"
                   v-model="filters.color"
                   @input="filter">
        </div>
        <div class="form-element">
            <label for="price">Цена</label>
            <div class="form-element-container">
                <input type="number" id="price"
                       v-model="filters.price_start"
                       @input="filter"
                       placeholder="от">
                <div class="delimiter">-</div>
                <input type="number" id="price"
                       v-model="filters.price_end"
                       @input="filter"
                       placeholder="до">
            </div>
        </div>
        <div class="form-element">
            <label for="size">Размер</label>
            <input type="number" id="size"
                   v-model="filters.size"
                    @input="filter">
        </div>
        <div class="form-element">
            <label for="description">Описание</label>
            <input type="text" id="description"
                   v-model="filters.description"
                    @input="filter">
        </div>
    </form>
</template>

<script>
export default {
    name: "ProductsFilters",

    data() {
        return {
            filters: {
                title: '',
                code: '',
                color: '',
                price_start: '',
                price_end: '',
                size: '',
                description: '',
            }
        }
    },

    methods: {
        filter() {
            this.$emit('getData', this.filters)
        }
    }
}
</script>

<style scoped lang="scss">
    .products-form {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 20px;
    }

    .form-element {
        display: flex;
        flex-direction: column;

        &-container {
            display: flex;
        }
    }
    .delimiter {
        margin: 0 10px;
    }
</style>
