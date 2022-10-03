<template>
    <div>
        <!--this will result in raw json-->
        {{ image }}
    </div>
</template>

<script>
export default {
    name: 'Show',
    props: {
        image: Object
    }
}
</script>
