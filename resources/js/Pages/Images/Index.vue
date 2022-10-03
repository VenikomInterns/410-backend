<template>
    <div class="w-50 mx-auto text-center">
        <button class="btn btn-primary my-5 ">
            <Link :href="route('images.create')" class="text-white">
                Upload Image
            </Link>
        </button>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">
                    id
                </th>
                <th>
                    image
                </th>
                <th scope="col">
                    name
                </th>
                <th scope="col">
                    image's product
                </th>
                <th scope="col">

                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="image in images" :key="image.id">
                <th scope="row">
                    {{ image.id }}
                </th>
                <td>
                    <img
                        :src="showImage(image.name)"
                        class="w-32 h-20 mx-auto"
                    />
                </td>
                <td>
                    {{ image.name }}
                </td>
                <td>
                    {{ productName(image.product_id) }}
                </td>
                <td>
                    <Link :href="route('images.destroy',image)" method="DELETE">
                        Delete
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
        images: Array,
        products: Array
    },
    methods: {
        productName(id) {
            //can be done on backend much easier
            for (const product of this.products) {
                if (product.id === id) {
                    return product.name;
                }
            }
            return "";
        },
        showImage(name){
            return new URL('../../../../storage/app/public/images/'+name,import.meta.url).href;
            // this is very wrong and wont work in production.
            // u need to generate public link not incude it in npm build
        }
    }
}
</script>
