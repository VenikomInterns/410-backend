<template>
    <div class="w-25 mx-auto text-center py-5">
        <h1 class="mb-5">Edit Category</h1>
        <form @submit.prevent="submit" class="row text-end">
            <label for="name" class="col-3">title</label>
            <input type="text" id="name" v-model="form.name"  class="col-9">

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
    name: 'Edit',
    props: {
        category: Object
    },
    data() {
        return{
            form: this.$inertia.form({
                name: this.category.name
            })
        }
    },
    methods: {
        submit(){
            //its much better to use form helper put method
            //for example this.form.put(route....)
            this.$inertia.put(route('categories.update',this.category), this.form);
        }
    }
}
</script>
