<template>
    <div class="products">
        <ProductsFilters class="products-filters"
                         @getData="getProducts"
        />
        <ProductsTable :items="products"/>
    </div>
</template>

<script>
import ProductsTable from './ProductsTable.vue';
import ProductsFilters from './ProductsFilters.vue';
import api from '../api';

export default {
    name: "Products",

    components: {
        ProductsTable,
        ProductsFilters
    },

    data() {
        return {
            products: [],
        }
    },

    methods: {
        ...api,

        getProducts(filters = {}) {
            this.getProductsQuery(filters)
                .then(res => this.products = res.data)
        }
    },

    created() {
        this.getProducts();
    }
}
</script>

<style scoped lang="scss">
    .products {
        &-filters {
            margin-bottom: 30px;
        }
    }
</style>
