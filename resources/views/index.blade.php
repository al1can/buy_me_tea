<x-app-layout>
    <div x-data="{ search: '' , 'users': ['asd','hadf','dga','agh'], func() { return this.users.filter(i => i.toLowerCase().startsWith(this.search.toLowerCase()))}}">
		<input type="text" x-model="search">
	   
		Searching for: <span x-text="search"></span>
		<template x-for="user in func" :key="user">
			<div x-text="user"></div>
		</template>
	</div>
</x-app-layout>