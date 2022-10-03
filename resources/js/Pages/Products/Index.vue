<template>
    <div class="w-50 mx-auto text-center">
        <button class="btn btn-primary my-5 ">
            <Link :href="route('products.create')" class="text-white">
                Create Product
            </Link>
        </button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">
                    id
                </th>
                <th scope="col">
                    name
                </th>
                <th scope="col">
                    price
                </th>
                <th scope="col">
                    product's category
                </th>
                <th scope="col">

                </th>
                <th scope="col">

                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products" :key="product.id">
                <th scope="row">
                    {{ product.id }}
                </th>
                <td>
                    {{ product.name }}
                </td>
                <td>
                    {{ product.price }}
                </td>
                <td>
                    {{ categoryName(product.category_id) }}
                </td>
                <td>
                    <Link :href="route('products.destroy',product)" method="DELETE">
                        Delete
                    </Link>
                </td>
                <td>
                    <Link :href="route('products.edit',product)">
                        Edit
                    </Link>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Index',
    props: {
        products: Array,
        categories: Array
    },
    methods: {
        categoryName(id) {
            for (const category of this.categories) {
                if (category.id === id) {
                    return category.name;
                }
            }
            return "";
        }
    }
}
</script>
