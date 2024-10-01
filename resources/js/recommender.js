async function query(data) {
    const response = await fetch(
        "https://api-inference.huggingface.co/models/google/gemma-2-2b-it",
        {
            headers: {
                Authorization: "Bearer hf_***",
                "Content-Type": "application/json",
            },
            method: "POST",
            body: JSON.stringify(data),
        }
    );
    const result = await response.json();
    return result;
}

query({ inputs: "Can you please let us know more details about your " }).then(
    (response) => {
        console.log(JSON.stringify(response));
    }
);
