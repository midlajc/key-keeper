<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->


	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

	<style>
		/*Overrides for Tailwind CSS */

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #edf2f7;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;
			/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important;
			/*bg-indigo-500*/
		}
	</style>
</head>

<body class="flex bg-gray-100 min-h-screen">
	<div class="flex-grow text-gray-800">
		<main class="p-6 sm:p-10 space-y-6">
			<div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
				<div class="mr-6">
					<h1 class="text-4xl font-semibold mb-2">Dashboard</h1>
				</div>
				<div class="flex flex-wrap items-start justify-end -mb-3">
					<button class="inline-flex px-5 py-3 text-white bg-gray-600 hover:bg-gray-700 focus:bg-gray-700 rounded-md ml-6 mb-3">
						<svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
						</svg>
						Add New Site
					</button>
				</div>
			</div>
			<div class="flex flex-wrap w-full gap-6">
				<section class=" flex-grow">
					<div class="flex flex-col row-span-3 bg-white shadow rounded-lg">
						<div class="px-6 py-5 font-semibold text-center border-b border-gray-100">Profile</div>
						<div class="p-4 flex-grow">
							<div class="flex items-center justify-center h-full px-4 py-24 text-gray-400 text-3xl font-semibold bg-gray-100 border-2 border-gray-200 border-dashed rounded-md">Chart</div>
						</div>
					</div>
				</section>
				<section class="grid flex-grow w-8/12 gap-6">
					<section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
						<div class="flex items-center p-8 bg-white shadow rounded-lg">
							<div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
								<svg width="30px" height="30px" viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(0)" stroke="#000000" stroke-width="0.00024000000000000003">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.24000000000000005"></g>
									<g id="SVGRepo_iconCarrier">
										<path d="M7.085 2H5v1h1.5A5.666 5.666 0 0 0 6 5.319c0 2.15 1.479 4.294 3.545 6.092a1.544 1.544 0 0 1 .62 1.089 1.544 1.544 0 0 1-.62 1.089C7.479 15.387 6 17.53 6 19.68A5.666 5.666 0 0 0 6.5 22H5v1h15v-1h-1.516A5.595 5.595 0 0 0 19 19.681c0-2.15-1.479-4.294-3.545-6.092a1.544 1.544 0 0 1-.62-1.089 1.544 1.544 0 0 1 .62-1.089C17.521 9.613 19 7.47 19 5.32A5.594 5.594 0 0 0 18.484 3H20V2zm10.292 1A4.646 4.646 0 0 1 18 5.32c0 1.645-1.137 3.54-3.201 5.337a2.432 2.432 0 0 0-.965 1.843 2.435 2.435 0 0 0 .965 1.844c2.064 1.796 3.2 3.691 3.2 5.337A4.646 4.646 0 0 1 17.378 22H7.624A4.68 4.68 0 0 1 7 19.68c0-1.645 1.137-3.54 3.201-5.337a2.432 2.432 0 0 0 .965-1.843 2.435 2.435 0 0 0-.965-1.844C8.137 8.86 7 6.965 7 5.32A4.68 4.68 0 0 1 7.623 3zM8.102 18.925a3.246 3.246 0 0 1 1.35-1.9l2.593-1.722a.823.823 0 0 1 .91 0l2.594 1.722a3.248 3.248 0 0 1 1.35 1.901 3.051 3.051 0 0 1 .1.755A3.645 3.645 0 0 1 16.75 21h-8.5A3.713 3.713 0 0 1 8 19.68a3.05 3.05 0 0 1 .102-.755z"></path>
										<path fill="none" d="M0 0h24v24H0z"></path>
									</g>
								</svg>
							</div>
							<div>
								<span class="block text-2xl font-bold">62</span>
								<span class="block text-gray-500">Expiring Soon</span>
							</div>
						</div>
						<div class="flex items-center p-8 bg-white shadow rounded-lg">
							<div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
								<svg fill="#000000" width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<title>letsencrypt</title>
										<path d="M15.986 21.652c0.004-0 0.009-0 0.014-0 0.883 0 1.599 0.716 1.599 1.599 0 0.594-0.323 1.112-0.804 1.387l-0.008 0.004v1.556c-0.003 0.432-0.354 0.781-0.787 0.781s-0.784-0.349-0.787-0.781v-1.556c-0.488-0.28-0.812-0.798-0.812-1.391 0-0.878 0.708-1.591 1.584-1.598h0.001zM2.915 13.187c-0.573 0.044-1.021 0.52-1.021 1.1s0.448 1.056 1.017 1.1l0.004 0h3.747c0.573-0.044 1.021-0.52 1.021-1.1s-0.448-1.056-1.017-1.1l-0.004-0zM25.214 13.184c-0.608 0.002-1.1 0.495-1.1 1.103 0 0.609 0.494 1.103 1.103 1.103 0.030 0 0.059-0.001 0.088-0.003l-0.004 0h3.782c0.573-0.044 1.021-0.52 1.021-1.1s-0.448-1.056-1.017-1.1l-0.004-0h-3.782q-0.044-0.003-0.088-0.003zM15.991 12.555c0.003 0 0.006 0 0.009 0 1.485 0 2.689 1.204 2.689 2.689 0 0 0 0 0 0v0 1.859h-5.379v-1.859c0 0 0-0 0-0 0-1.482 1.199-2.684 2.68-2.689h0.001zM15.975 8.939c-3.472 0.014-6.281 2.831-6.281 6.305v0 1.859h-1.458c-0.665 0.002-1.203 0.54-1.206 1.205v11.483c0.002 0.665 0.541 1.203 1.205 1.205h15.528c0.665-0.002 1.203-0.54 1.205-1.205v-11.485c-0.003-0.664-0.541-1.2-1.205-1.203h-1.46v-1.859c-0-3.482-2.823-6.305-6.305-6.305-0.008 0-0.017 0-0.025 0h0.001zM6.403 4.906c-0 0-0 0-0 0-0.609 0-1.103 0.494-1.103 1.103 0 0.313 0.13 0.596 0.34 0.797l0 0 2.962 2.437c0.188 0.156 0.431 0.25 0.696 0.25 0.002 0 0.003 0 0.004 0h-0v-0.002c0 0 0 0 0 0 0.608 0 1.1-0.493 1.1-1.1 0-0.341-0.155-0.646-0.399-0.848l-0.002-0.001-2.964-2.435c-0.177-0.126-0.397-0.201-0.635-0.201h-0zM25.617 4.889c-0.246 0.001-0.472 0.083-0.654 0.22l0.003-0.002-2.967 2.434c-0.247 0.203-0.402 0.509-0.402 0.851 0 0.608 0.493 1.101 1.101 1.101 0.266 0 0.51-0.094 0.701-0.252l-0.002 0.002 2.963-2.438c0.223-0.202 0.363-0.493 0.363-0.817 0-0.608-0.493-1.1-1.1-1.1-0.002 0-0.004 0-0.006 0h0zM15.989 1.004c-0.576 0.006-1.046 0.452-1.089 1.017l-0 0.004v3.775c0.004 0.605 0.495 1.094 1.1 1.094 0.604 0 1.095-0.487 1.1-1.090v-3.779c-0.044-0.573-0.52-1.021-1.1-1.021-0.004 0-0.007 0-0.011 0h0.001z"></path>
									</g>
								</svg>
							</div>
							<div>
								<span class="block text-2xl font-bold">6</span>
								<span class="block text-gray-500">Issued</span>
							</div>
						</div>

						<div class="flex items-center p-8 bg-white shadow rounded-lg">
							<div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
								<svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path d="M182.99 146.2h585.14v402.29h73.14V73.06H109.84v877.71H512v-73.14H182.99z" fill="#000000"></path>
										<path d="M256.13 219.34h438.86v73.14H256.13zM256.13 365.63h365.71v73.14H256.13zM256.13 511.91h219.43v73.14H256.13zM731.55 585.06c-100.99 0-182.86 81.87-182.86 182.86s81.87 182.86 182.86 182.86c100.99 0 182.86-81.87 182.86-182.86s-81.86-182.86-182.86-182.86z m0 292.57c-60.5 0-109.71-49.22-109.71-109.71 0-60.5 49.22-109.71 109.71-109.71 60.5 0 109.71 49.22 109.71 109.71 0.01 60.49-49.21 109.71-109.71 109.71z" fill="#000000"></path>
										<path d="M758.99 692.08h-54.86v87.27l69.39 68.76 38.61-38.96-53.14-52.66z" fill="#000000"></path>
									</g>
								</svg>
							</div>
							<div>
								<span class="block text-2xl font-bold">10</span>
								<span class="block text-gray-500">Pending Validation</span>
							</div>
						</div>
						<div class="flex items-center p-8 bg-white shadow rounded-lg">
							<div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
								<svg width="35px" height="35px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
									<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
									<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
									<g id="SVGRepo_iconCarrier">
										<path d="M511.9 183c-181.8 0-329.1 147.4-329.1 329.1s147.4 329.1 329.1 329.1S841 693.9 841 512.2 693.6 183 511.9 183z m0 585.2c-141.2 0-256-114.8-256-256s114.8-256 256-256 256 114.8 256 256-114.9 256-256 256z" fill="#0F1F3C"></path>
										<path d="M475.4 365.7h73.1v182.9h-73.1zM475.4 585.1h73.1v73.1h-73.1z" fill="#0F1F3C"></path>
									</g>
								</svg>
							</div>
							<div>
								<span class="inline-block text-2xl font-bold">9</span>
								<span class="block text-gray-500">Expired</span>
							</div>
						</div>
					</section>
					<section class="grid xl:grid-flow-col gap-6">
						<div class="p-8 flex flex-col md:col-span-12 md:row-span-2 bg-white shadow rounded-lg">
							<div class=" py-5 font-semibold border-b border-gray-100">Certificates</div>
							<table id="example" class="" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
								<thead>
									<tr>
										<th data-priority="1">Name</th>
										<th data-priority="2">Position</th>
										<th data-priority="3">Office</th>
										<th data-priority="4">Age</th>
										<th data-priority="5">Start date</th>
										<th data-priority="6">Salary</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
									</tr>


									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
								</tbody>

							</table>
						</div>

					</section>
				</section>
			</div>
		</main>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
</body>

</html>