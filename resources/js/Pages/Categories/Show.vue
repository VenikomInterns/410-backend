<template>
    <div>
        <!--This results into raw category-->
        {{ category }}
    </div>
</template>

<script>
export default {
    name: 'Show',
    props: {
        category: Object
    }
}
</script>
