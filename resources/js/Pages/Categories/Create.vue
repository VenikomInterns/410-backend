<template>
    <div class="w-25 mx-auto text-center py-5">
        <h1 class="mb-5">Create Category</h1>
        <form @submit.prevent="submit" class="row text-end">
            <label for="name" class="col-2">title</label>
            <input type="text" id="name" v-model="form.name" class="col-10">
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
    data(){
        return{
            form: this.$inertia.form({
                name: ""
            })
        }
    },
    methods: {
        submit(){
             //its much better to use form helper post method
            //for example this.form.post(route....)
            this.$inertia.post(route('categories.store'),this.form)
        }
    }
}
</script>
