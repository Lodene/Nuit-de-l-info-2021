<script>
	import Header from "./components/Header.svelte";
	import Footer from "./components/Footer.svelte";
	import ListResults from "./components/ListResults.svelte";
	import Home from "./components/Home.svelte";
	import DisplayResult from "./components/DisplayResult.svelte";
	

	let searchValue;
	let selectedItem;
	
	const updateSearch = (e) => {
		searchValue = e.detail;
	}
	
	const updateSelection = (e) => {
		selectedItem = e.detail;
	}

</script>

<main>
	<Header on:updateSearch={updateSearch}/>
	{#if searchValue != null && searchValue != '' && selectedItem == null}
		<ListResults {searchValue} on:updateSelection={updateSelection}/>
	{:else if selectedItem != null}
		<DisplayResult {selectedItem}/>
	{:else}
		<Home/>
	{/if}
	<Footer/>
</main>

<style>

</style>