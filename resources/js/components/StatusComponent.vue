<template>
    <div class="form-group">
        <label for="status">Status</label><br>
        <input id="status" type="checkbox" name="status" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            console.log(status)
        },
        props: [
            'status'
        ]
    }
</script>
