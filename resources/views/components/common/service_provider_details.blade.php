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
        color: black;
    }

    #clearBtn {
        padding: 10px 20px;
        font-size: 1rem;
        background: red;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    #clearBtn:hover {
        background: darkred;
        color: black;
    }

    #message {
        margin-top: 20px;
        font-weight: bold;
    }

    .container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .btn {
        border: 1px solid white;
        padding: 10px 40px;
    }

    .btn:hover {
        color: black;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/user/dashboard/book" class="btn btn-primary">Book</a>
                    <a href="/user/dashboard/compliant-create" class="btn btn-danger">Compliant</a>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="#" method="post">
    @csrf
    <div class="rating-container">
        <h5>Rating here</h5>
        <div class="stars" id="starContainer">
            <span class="star" data-value="1">&#9734;</span>
            <span class="star" data-value="2">&#9734;</span>
            <span class="star" data-value="3">&#9734;</span>
            <span class="star" data-value="4">&#9734;</span>
            <span class="star" data-value="5">&#9734;</span>
        </div>
        <textarea id="reviewText" rows="4" style="width: 100%; border-radius: 6px; padding: 10px; margin-bottom: 15px;" placeholder="Write your review here..."></textarea>
        <button id="clearBtn">Clear</button>
        <button id="submitBtn">Submit</button>
        <p id="message"></p>
    </div>
</form>



<script>
    const stars = document.querySelectorAll(".star");
    const message = document.getElementById("message");
    const submitBtn = document.getElementById("submitBtn");
    const clearBtn = document.getElementById("clearBtn");
    const reviewText = document.getElementById("reviewText");

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
        const reviewText = document.getElementById("reviewText").value.trim();
        if (selectedRating === 0) {
            message.textContent = "Please select a rating.";
            message.style.color = "red";
        } else if (reviewText === "") {
            message.textContent = "Please write a review.";
            message.style.color = "red";
        } else {
            message.textContent = `Thanks for rating us ${selectedRating} star(s)! Your review: ${reviewText}`;
            message.style.color = "green";
        }
    });

    clearBtn.addEventListener("click", () => {

        selectedRating = 0;
        highlightStars(0);
        reviewText.value = "";
        message.textContent = "";
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