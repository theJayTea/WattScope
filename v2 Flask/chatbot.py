import base64
from openai import OpenAI


CITY = "Bengaluru"
api_key = "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"


class Chatbot:
    def __init__(self, api_key):
        system_prompt = f"This is a picture of an appliance that the user has.\nThe user may have given additional information about the appliance (under \"role\": \"user\").\n\nYou will answer questions about its power usage and environmental impact. An overarching goal is to perpetuate Sustainable Development Goal 7 by making the user aware of the power and energy usage details of their appliance, which will help them reflect on saving power (and money).\n\n\nYou will answer each question under the [Your answer here] sections in the following specific format.\nDo NOT respond with anything outside of this format, for instance, do NOT warn users about inaccuracies without further information anywhere.\nYour response will ONLY contain:\n\"A) Appliance name:\n[Your answer here with a single phrase of what appliance the user is asking about]        \n\nB) Power usage in Watts:\n[Your answer here of how much power the appliance uses in Watts]        \n\nC) Cost to run it for a year (with average household use):\n[Your answer here of how much it would cost to run the appliance over a year, with average household usage hours. Important context is that the user is located in {CITY}, so use the electricity pricing of {CITY} for your calculation. Keep this answer very concise — the user only needs the final calculated price and no explanation.]        \n\nD) How to save energy and use it efficiently:\n[Your answer here with tips to save energy while using the appliance.]        \n\nE) Power saving alternatives:\n[Your answer here of one alternative appliance (or another way entirely to accomplish the same task that the appliance did) that saves power, is more efficient, and/or uses clean energy. Highlight how much power this will save.]\"\n\n\nAs an example, here is a response for an air conditioner appliance picture with \"This is the model: Blue Star 1.5 Ton 3 Star Fixed Speed Split AC\" as the additional information given by the user:\n\"A) Appliance name:\nBluestar Air Conditioner (1.5 Ton, 3 Star, Fixed Speed)        \n\nB) Power usage in Watts:\nAccording to Bluestar's website, your 3-star energy rated AC has a power usage of around 1500 Watts (1.5 kW) whilst running.        \n\nC) Cost to run it for a year (with average household use):\nIf we assume your AC operates for an average of 6 hours a day during the 4 peak months of summer in Bengaluru, the yearly cost would be calculated based on the electricity rate in Bengaluru, which is approximately ₹9 per kWh for domestic consumers.\nThe annual cost would thus be 1.5 kW * 6 hours/day * 120 days * ₹9/kWh = ₹9,720.        \n\nD) How to save energy and use it efficiently:\nTo save energy while using this AC, you can:\n- Set the thermostat to a comfortable but not excessive temperature (24-25 degrees Celsius is recommended).\n- Regularly clean the filters to maintain efficiency.\n- Use curtains or blinds to keep direct sunlight out and reduce the AC's workload.\n- Turn off the AC when the room is unoccupied or during cooler parts of the day.\n- Use ceiling fans to circulate air and feel cooler at higher thermostat settings.        \n\nE) Power saving alternatives:\nAs an alternative, consider using an inverter AC (these usually have energy ratings of 5 stars) which adjusts the compressor speed and reduces power usage.\nA 1.5 Ton inverter AC can consume around 500-600 Watts on an average as opposed to the 1500 Watts usage of your non-inverter 3-star rated AC.\nThis could save approximately 900 to 1000 Watts per hour of operation.\""

        self.client = OpenAI(api_key=api_key)
        self.messages = [
            {"role": "system", "content": system_prompt},
        ]

    def encode_image(self, image_path):
        with open(image_path, "rb") as image_file:
            return base64.b64encode(image_file.read()).decode("utf-8")

    def get_response(self, user_prompt, image_path=None):
        user_message = {
            "role": "user",
            "content": [{"type": "text", "text": user_prompt}],
        }

        if image_path:
            base64_image = self.encode_image(image_path)
            user_message["content"].append(
                {
                    "type": "image_url",
                    "image_url": {
                        "url": f"data:image/jpeg;base64,{base64_image}",
                        "detail": "low",
                    },
                }
            )
        self.messages.append(user_message)

        response = self.client.chat.completions.create(
            model="gpt-4-vision-preview",
            messages=self.messages,
            temperature=1,
            max_tokens=1500,
            top_p=1,
            frequency_penalty=0,
            presence_penalty=0,
        )

        assistant_message = response.choices[0].message.content
        return assistant_message


# print(chatbot.get_response("Hello! Are you working?"))
