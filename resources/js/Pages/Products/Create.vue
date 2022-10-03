<template>
    <div class="w-25 mx-auto text-center py-5">
        <h1 class="mb-5">Add Product</h1>
        <form @submit.prevent="submit" class="row text-end">
            <label for="name" class="col-3">title</label>
            <input type="text" id="name" v-model="form.name" class="col-9">

            <label for="price" class="col-3">price</label>
            <input type="number" min="0" step="0.01" id="price" v-model="form.price" class="col-9">

            <label for="category_id" class="col-3">category</label>
            <select
                class="col-9"
                name="category_id"
                id="category_id"
                type="text"
                v-model="form.category_id">
                <option v-for="category in categories" :key="category.id" :value="category.id">
                    {{category.name}}
                </option>
            </select>

            <div className="d-flex align-items-end flex-column w-100">
                <button type="submit" className="btn bg-primary text-white w-25 my-2">
                    Save
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'Create',
    props : {
        categories: Array,
    },
    data(){
        return{
            form: this.$inertia.form({
                name: "",
                price: "",
                category_id: ""
            }),
        }
    },
    methods: {
        submit(){
            //use form helper
            this.$inertia.post(route('products.store'),this.form)
        }
    }
}
</script>
