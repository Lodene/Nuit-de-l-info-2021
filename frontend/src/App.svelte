<script>
	import Header from "./components/Header.svelte";
	import Footer from "./components/Footer.svelte";
	import ListResults from "./components/ListResults.svelte";
	import Home from "./components/Home.svelte";
	

	let searchValue;
	
	const updateSearch = (e) => {
		searchValue = e.detail;
		console.log(searchValue);
	}

</script>

<main>
	<Header on:updateSearch={updateSearch}/>
	{#if searchValue != null && searchValue != ''}
		<ListResults {searchValue}/>
	{:else}
		<Home/>
	{/if}
	<Footer/>
</main>

<style>

</style>