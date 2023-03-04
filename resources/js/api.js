import axios from 'axios';

export default {
    getProductsQuery(params) {
        return axios.get('/products', { params });
    }
}
