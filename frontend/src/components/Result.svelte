<script>
    import { fade } from "svelte/transition";
    export let result;
</script>


<div class="result" in:fade>
    <div class="img-container">
        <img src="../ressources/default_picture.png" alt="resultPicture">
    </div>
    
    <div class="details">
        <h3>{result.firstName} {result.lastName}</h3>
        <p>{result.age}</p>
    </div>
</div>


<style>
    .result {
        display: flex;
        justify-content: space-between;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.24);
        margin: 30px 0;
        width: 600px;
        font-size: 20px;
        padding: 30px;
        border-radius: 10px;
        transition-duration: 0.5s;
        cursor: pointer;
    }

    .img-container {
        overflow: hidden;
        width: 130px;
        display: flex;
        justify-content: center;
        border: 1px solid black;
    }

    img {
        height: 170px;
    }

    .details {
        width: 400px;
    }

    .result:hover {
        box-shadow: 3px 4px 5px rgba(0, 0, 0, 0.103);
        transform: scale(1.05);
    }

</style>