<template>
    <table class="table">
        <thead>
            <tr>
                <th class="table-cell">Id</th>
                <th class="table-cell">Наименование</th>
                <th class="table-cell">Код</th>
                <th class="table-cell">Цвет</th>
                <th class="table-cell">Цена</th>
                <th class="table-cell">Размер</th>
                <th class="table-cell">Описание</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in items" :key="item.id">
                <td class="table-cell">{{ item.id }}</td>
                <td class="table-cell">{{ item.title }}</td>
                <td class="table-cell">{{ item.code }}</td>
                <td class="table-cell">{{ item.color }}</td>
                <td class="table-cell">{{ item.price }}</td>
                <td class="table-cell">{{ item.size }}</td>
                <td class="table-cell">{{ item.description }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "ProductsTable",

    props: {
        items: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped lang="scss">
    .table {
        border-collapse: collapse;

        &-cell {
            border: solid 1px;
            padding: 10px;
        }
    }
</style>
