<template>
    <div class="w-25 mx-auto text-center py-5">
        <h1 class="mb-5">Edit Product</h1>
        <form @submit.prevent="submit" class="row text-end">
            <label for="name" class="col-3">title</label>
            <input type="text" id="name" v-model="form.name" class="col-9">

            <label for="price" class="col-3">price</label>
            <input type="number" min="0" step="0.01" id="price" v-model="form.price" class="col-9">


            <div className="d-flex align-items-end flex-column w-100">
                <button type="submit" className="btn bg-primary text-white w-25 my-2">
                    Save
                </button>
            </div>
            <p>{{message}}</p>
        </form>
    </div>
</template>

<script>
export default {
    name: 'Edit',
    props: {
        product: Object
    },
    data() {
        return{
            form: this.$inertia.form({
                name: this.product.name,
                price: this.product.price
            })
        }
    },
    methods: {
        submit(){
            this.$inertia.put(route('products.update',this.product), this.form);
        }
    }
}
</script>
