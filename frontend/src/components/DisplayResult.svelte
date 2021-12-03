<script>
    import { fade } from "svelte/transition";

    export let selectedItem;
</script>


<div class="displayResult">
    <img src="../ressources/default_picture.png" alt="portrait">

    <div>
        <h1>{selectedItem.firstName} {selectedItem.lastName}</h1>
        <h3>Né le {selectedItem.birthDay} ({selectedItem.age} ans)</h3>
    </div>
</div>


<style>
    .displayResult {
        margin: 50px auto;
        width: 800px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;
        
    }

    img {
        width: 300px;
    }
</style>