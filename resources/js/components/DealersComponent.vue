<template>
    <div class="button-container">
        <button class="btn-dealers">
            <a href="/dealers/load">
                Load Dealers
            </a>
        </button>
        <button class="btn-dealers">
            <a href="/dealers/add">
                Add a dealer
            </a>
        </button>
        <button class="btn-dealers">
            <a href="/dealers/delete">
                Delete a dealer
            </a>
        </button>
    </div>
</template>
<script>
    import "../../css/dealers.css";
    export default {
        name: "#dealers",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
