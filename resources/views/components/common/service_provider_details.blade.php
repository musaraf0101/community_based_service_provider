<style>
    .rating-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
    }
    .stars {
        margin: 20px 0;
    }
    .star {
        font-size: 2rem;
        cursor: pointer;
        color: #ccc;
    }
    .star.hover,
    .star.selected {
        color: gold;
    }
    button {
        padding: 10px 20px;
        font-size: 1rem;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }
    button:hover {
        background: #0056b3;
    }
    #message {
        margin-top: 20px;
        font-weight: bold;
    }
</style>

<div class="rating-container">
    <div class="stars" id="starContainer">
        <span class="star" data-value="1">&#9734;</span>
        <span class="star" data-value="2">&#9734;</span>
        <span class="star" data-value="3">&#9734;</span>
        <span class="star" data-value="4">&#9734;</span>
        <span class="star" data-value="5">&#9734;</span>
    </div>
    <button id="submitBtn">Submit</button>
    <p id="message"></p>
</div>

<script>
    const stars = document.querySelectorAll(".star");
    const message = document.getElementById("message");
    const submitBtn = document.getElementById("submitBtn");

    let selectedRating = 0;

    stars.forEach((star) => {
        star.addEventListener("mouseover", () => {
            const val = +star.dataset.value;
            highlightStars(val);
        });

        star.addEventListener("mouseout", () => {
            highlightStars(selectedRating);
        });

        star.addEventListener("click", () => {
            selectedRating = +star.dataset.value;
            highlightStars(selectedRating);
        });
    });

    submitBtn.addEventListener("click", () => {
        if (selectedRating === 0) {
            message.textContent = "Please select a rating.";
            message.style.color = "red";
        } else {
            message.textContent = `Thanks for rating us ${selectedRating} star(s)!`;
            message.style.color = "green";
        }
    });

    function highlightStars(rating) {
        stars.forEach((star) => {
            if (+star.dataset.value <= rating) {
                star.classList.add("selected");
            } else {
                star.classList.remove("selected");
            }
        });
    }
</script>