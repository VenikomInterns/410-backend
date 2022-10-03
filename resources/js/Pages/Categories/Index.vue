<template>
    <div class="w-50 mx-auto text-center">
        <button class="btn btn-primary my-5 ">
            <Link :href="route('categories.create')" class="text-white">
                Create Category
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

                </th>
                <th scope="col">

                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="category in categories" :key="category.id"> <!--missing :key="" attribute-->
                <th scope="row">
                    {{category.id}}
                </th>
                <td>
                    {{category.name}}
                </td>
                <td>
                    <Link :href="route('categories.destroy',category)" method="DELETE">
                        Delete
                    </Link>
                </td>
                <td>
                    <Link :href="route('categories.edit',category)">
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
    created() {
        console.log(this.categories)
    },
    name: 'Index',
    props: {
        categories: Array
    }
}
</script>
