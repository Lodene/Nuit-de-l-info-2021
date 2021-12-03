<script>
	import Header from "./components/Header.svelte";
	import Footer from "./components/Footer.svelte";
import ListResults from "./components/ListResults.svelte";

	let searchValue;
	
	const updateSearch = (e) => {
		searchValue = e.detail;
		console.log(searchValue);
	}

</script>

<main>
	<Header on:updateSearch={updateSearch}/>
	<ListResults {searchValue}/>
	<Footer/>
</main>

<style>

</style>