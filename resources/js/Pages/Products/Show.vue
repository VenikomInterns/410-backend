<template>
    <div>
        <!-- file is Show but we are receiving products props thats -->
        {{ products }}
    </div>
</template>

<script>
export default {
    name: 'Show',
    props: {
        products: Object
    }
}
</script>
