<div id="showHireModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full dark:text-white">
    <div
        class="relative w-full max-w-lg p-6 md:h-auto bg-white dark:bg-black rounded-lg shadow-lg md:max-h-[90%] overflow-y-auto">

        <!-- Modal Header -->
        <div class="flex items-center justify-between pb-4">
            <h3 class="text-xl font-medium">Project Request</h3>
            <button type="button" class="text-gray-900 dark:text-gray-200 hover:text-blue-600"
                data-modal-hide="showHireModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <form action="{{ URL::to('/hire-me') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block text-md font-medium">Full Name</label>
                <input id="full_name" type="text" name="full_name" placeholder="Enter your name"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Representative -->
            <div>
                <label for="client_type" class="block text-md font-medium">Representative</label>
                <select id="client_type" name="client_type"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="individual">Individual</option>
                    <option value="company">Company</option>
                </select>
            </div>

            <!-- Company Name (only visible if company selected) -->
            <div id="company_name_wrapper" class="hidden">
                <label for="company_name" class="block text-md font-medium">Company Name</label>
                <input id="company_name" type="text" name="company_name" placeholder="Enter company name"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Project Title -->
            <div>
                <label for="project_title" class="block text-md font-medium">Project Title</label>
                <input id="project_title" type="text" name="project_title" placeholder="Enter project title"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Project Description -->
            <div>
                <label for="project_description" class="block text-md font-medium">Project Description</label>
                <textarea id="project_description" name="project_description" rows="4"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter project details" required></textarea>
            </div>

            <!-- Project Type -->
            <div>
                <label for="project_type" class="block text-md font-medium">Project Type</label>
                <select id="project_type" name="project_type"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="website">Website</option>
                    <option value="android_app">Android</option>
                </select>
            </div>

            <!-- Project Level -->
            <div>
                <label class="block text-md font-medium">Project Level</label>
                <div id="priceOptions" class="space-y-2"></div>
            </div>

            <!-- Contact Email -->
            <div>
                <label for="contact_email" class="block text-md font-medium">Contact Email</label>
                <input id="contact_email" type="email" name="contact_email" placeholder="Enter your email"
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <!-- Estimated Completion Date -->
            <div>
                <label for="estimated_date" class="block text-md font-medium">Completion Date</label>
                <input id="estimated_date" type="text" name="estimated_date" readonly
                    class="block w-full px-3 py-2 mt-1 text-gray-900 bg-gray-100 dark:bg-custom-dark dark:text-white border-gray-100 dark:border-black border rounded-full focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-custom-dark shadow-lg shadow-black/50 dark:bg-white dark:shadow-lg dark:shadow-white/50 text-white dark:text-black text-center font-medium rounded-full hover:bg-blue-500 hover:shadow-blue-500/50 hover:text-black font-medium px-6 py-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const priceOptions = document.getElementById('priceOptions');
    const clientType = document.getElementById('client_type');
    const projectType = document.getElementById('project_type');
    const companyNameWrapper = document.getElementById('company_name_wrapper');
    const companyNameInput = document.getElementById('company_name');

    const pricing = {
        individual: {
            website: [{
                    id: 'small',
                    label: 'Small (From PGK1,200 - 1 month)',
                    days: 30
                },
                {
                    id: 'medium',
                    label: 'Medium (From PGK4,000 - 2.5 months)',
                    days: 75
                },
                {
                    id: 'large',
                    label: 'Large (From PGK8,000 - 3 months)',
                    days: 90
                }
            ],
            android_app: [{
                    id: 'small',
                    label: 'Small (From PGK1,500 - 1 month)',
                    days: 30
                },
                {
                    id: 'medium',
                    label: 'Medium (From PGK5,000 - 2.5 months)',
                    days: 75
                },
                {
                    id: 'large',
                    label: 'Large (From PGK9,000 - 3 months)',
                    days: 90
                }
            ]
        },
        company: {
            website: [{
                    id: 'small',
                    label: 'Small (From PGK2,500 - 1 month)',
                    days: 30
                },
                {
                    id: 'medium',
                    label: 'Medium (From PGK7,500 - 2.5 months)',
                    days: 75
                },
                {
                    id: 'large',
                    label: 'Large (From PGK15,000 - 3 months)',
                    days: 90
                }
            ],
            android_app: [{
                    id: 'small',
                    label: 'Small (From PGK3,000 - 1 month)',
                    days: 30
                },
                {
                    id: 'medium',
                    label: 'Medium (From PGK9,000 - 2.5 months)',
                    days: 75
                },
                {
                    id: 'large',
                    label: 'Large (From PGK18,000 - 3 months)',
                    days: 90
                }
            ]
        }
    };

    function renderPrices(client, project) {
        priceOptions.innerHTML = '';
        const selectedPricing = pricing[client]?.[project] || [];

        selectedPricing.forEach(option => {
            const div = document.createElement('div');
            div.innerHTML = `
                <input id="${option.id}" type="radio" name="project_level" value="${option.id}" class="mr-2" required>
                <label for="${option.id}" class="text-sm">${option.label}</label>
            `;
            priceOptions.appendChild(div);
        });

        document.querySelectorAll('input[name="project_level"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const selected = selectedPricing.find(p => p.id === this.value);
                const today = new Date();
                const estimatedDate = new Date(today.setDate(today.getDate() + selected.days));
                document.getElementById('estimated_date').value = estimatedDate.toISOString().split(
                    'T')[0];
            });
        });
    }

    // Initial render
    renderPrices(clientType.value, projectType.value);

    // Client Type change logic
    clientType.addEventListener('change', function() {
        renderPrices(this.value, projectType.value);
        if (this.value === 'company') {
            companyNameWrapper.classList.remove('hidden');
            companyNameInput.setAttribute('required', 'required');
        } else {
            companyNameWrapper.classList.add('hidden');
            companyNameInput.removeAttribute('required');
            companyNameInput.value = '';
        }
    });

    projectType.addEventListener('change', function() {
        renderPrices(clientType.value, this.value);
    });
</script>
