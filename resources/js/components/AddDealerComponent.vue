<template>
    <div>Добавление дилера</div>
    <div class="input-container">
        <form method="POST" action="/execute">
            <div class="input-row">
                <p>Name</p>
                <input name="name" id="name" type="text"></input>
            </div>
            <div class="input-row">
                <p>City</p>
                <input name="city" id="city" type="text"></input>
            </div>
            <div class="input-row">
                <p>Address</p>
                <input name="address" id="address" type="text"></input>
            </div>
            <div class="input-row">
                <p>Area</p>
                <input name="area" id="area" type="text"></input>
            </div>
            <div class="input-row">
                <p>Rating</p>
                <input name="rating" id="rating" type="number"></input>
            </div>
            <div>
                <input type="submit" value="Add dealer"></input>
            </div>
        </form>
    </div>
</template>
<script>
    import "../../css/addDealer.css";
    export default {
        name: "#addDealer",
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
