# WattScope: Your Novel Energy Analysis AI

Energy wastage is a significant issue in today's world, with buildings and their appliances being major contributors. This not only impacts the environment but also leads to high electricity bills.

Our solution, WattScope, is a web application (for mobile and PC) that enables action toward this issue by providing an AI analysis of the energy usage profile of any home appliance in seconds. There is no current solution that does this, and WattScope's efficacy surpassed our expectations.

By merely clicking a picture of an appliance (and optionally typing/speaking additional details), users can understand the appliance's power usage and the monetary cost of their usage of that appliance (the AI factors in local electricity slab rates and currencies).

In addition, the AI provides insight into how to efficiently save energy whilst using the appliance.

It also provides alternative appliances or methods that accomplish the same task while using lower power than the original appliance.


WattScope's overarching goal is to perpetuate Sustainable Development Goal 7 by making the user aware of the power and energy usage details of their appliance, which will help them reflect on saving power (and in turn, money).
All this is through a philosophy of clean, intuitive, and responsive design.


It uses one of the best current multimodal Large Language Models (GPT-4 Turbo with Vision), integrating image and text modalities for analysis using sophisticated model tuning and prompt engineering (using conditionals and extensive testing).


Some more technical features include:
- **User History**: A sign-up and login system that allows for past scan history and details to be saved across sessions.
- **Localized Expenditure Calculation**: Monetary expenditure is calculated based on the user's location (retrieved and stored at login), calibrated for accurate electricity costs and the currency of the location.
