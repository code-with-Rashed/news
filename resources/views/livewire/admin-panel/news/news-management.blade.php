<div>
    <!-- Add News Modal Start -->
    <div class="modal fade" id="addNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Add New News
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="image" class="fw-bold mb-2">Image</label>
                            <input type="file" id="image" class="form-control" accept=".png,.jpeg,.jpg"
                                required />
                        </div>
                        <div class="form-group mb-3">
                            <label for="role" class="fw-bold mb-2">Category</label>
                            <select id="role" class="form-control" required>
                                <option value="" selected disabled>Select a Category</option>
                                <option value="1">Politics</option>
                                <option value="2">Technology</option>
                                <option value="3">Lifestyle</option>
                                <option value="4">Seo</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="fw-bold mb-2">Title</label>
                            <input type="text" class="form-control border" id="name" required
                                placeholder="Title...." maxlength="250" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="news" class="fw-bold mb-2">News</label>
                            <textarea class="form-control" id="addNews" cols="30" rows="6" placeholder="News...."></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-cloud-arrow-up"></i>
                                Publish
                            </button>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-cloud-arrow-down"></i>
                                Un-Publish
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add News Modal End -->

    <!-- Edit News Modal Start -->
    <div class="modal fade" id="editNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Update News
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="image" class="fw-bold mb-2">Current Image</label>
                            <img src="https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1130.jpg?w=1060&t=st=1700705299~exp=1700705899~hmac=7cfd061d9da698def163afc793a94d5b596070a0ff14d2d2eb153d53b4bd5ab9"
                                alt="current image" class="w-25 ms-3 rounded" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="fw-bold mb-2">Chose Another Image</label>
                            <input type="file" id="image" class="form-control" accept=".png,.jpeg,.jpg" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="role" class="fw-bold mb-2">Category</label>
                            <select id="role" class="form-control" required>
                                <option value="1">Politics</option>
                                <option value="2" selected>Technology</option>
                                <option value="3">Lifestyle</option>
                                <option value="4">Seo</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title" class="fw-bold mb-2">Title</label>
                            <input type="text" class="form-control border" id="name" required
                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, doloremque!"
                                maxlength="250" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="news" class="fw-bold mb-2">News</label>
                            <textarea class="form-control" id="editNews" cols="30" rows="6"
                                placeholder="News......">
 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, veritatis id! Officiis ad optio aliquid hic distinctio labore earum, ex modi recusandae delectus, vitae inventore nam quos vero, soluta animi unde illo sit! Accusantium, labore? Porro nostrum dignissimos voluptatem voluptate ut vel ratione perspiciatis non aspernatur voluptatum iste, perferendis impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio sed quod consequatur corporis fugiat! Cum dignissimos dolore commodi quidem fugiat?</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit News Modal End -->

    <!-- Details News Modal Start -->
    <div class="modal fade" id="detailNewsModal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Details News
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rem
                        blanditiis quibusdam.
                    </p>
                    <img src="https://img.freepik.com/free-photo/soccer-players-action-professional-stadium_654080-1130.jpg?w=1060&t=st=1700705299~exp=1700705899~hmac=7cfd061d9da698def163afc793a94d5b596070a0ff14d2d2eb153d53b4bd5ab9"
                        alt="news image" class="w-100 rounded" height="400px" style="object-fit: cover" />
                    <div class="mt-3 d-flex justify-content-between">
                        <div>
                            <button type="button" class="btn btn-sm btn-primary" title="Likes">
                                <i class="bi bi-hand-thumbs-up"></i>
                                200
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary mx-1" title="Dislikes">
                                <i class="bi bi-hand-thumbs-down"></i>
                                80
                            </button>
                            <button type="button" class="btn btn-sm btn-primary" title="Comments">
                                <i class="bi bi-chat"></i>
                                300
                            </button>
                            <button type="button" class="btn btn-sm btn-primary" title="Views">
                                <i class="bi bi-graph-up-arrow"></i>
                                600
                            </button>
                        </div>
                        <div class="ms-auto">
                            <span title="Category" class="me-2"><i class="bi bi-tag"></i>Sports</span>
                            <span title="Author Name" class="me-2"><i class="bi bi-pencil"></i> Rashed alam</span>
                            <span title="Release Date"><i class="bi bi-calendar3"></i> 10/08/2023</span>
                        </div>
                    </div>
                    <div class="my-4">
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum
                            hic rem quidem omnis rerum alias ipsam consequatur, beatae quae
                            animi.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laudantium tenetur commodi sapiente sit cupiditate ullam at
                            aperiam itaque eius id quam laboriosam accusantium, cum ratione
                            enim dolore fugit, libero, qui quis mollitia ab quidem sequi!
                            Provident, reiciendis ullam? Alias ab maiores, aliquam vitae
                            debitis fuga eos obcaecati consequatur molestiae corrupti.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
                            officiis magni voluptas tempore quod voluptatibus vitae ratione
                            totam incidunt. Vitae fuga recusandae praesentium,
                            necessitatibus ipsum ducimus officia. Et cum ex eveniet
                            voluptate non dolore doloribus, aperiam perferendis tempore
                            maiores? Cum optio provident unde dolorum laborum ullam quasi,
                            perspiciatis, iure quibusdam dolores exercitationem praesentium,
                            rerum adipisci? Voluptates in quas reiciendis, eum, blanditiis
                            debitis dolor iusto nostrum aspernatur similique veniam! Sit
                            porro autem accusantium expedita, quidem molestias rerum
                            voluptatibus aliquid quas, officia eaque culpa perferendis
                            dolorum possimus sunt sapiente accusamus quia dignissimos
                            laborum aut dolore minima quod. Enim cum labore temporibus
                            numquam!
                        </p>
                    </div>
                    <hr />
                    <!-- Comments -->
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong><i class="bi bi-chat me-1 text-primary"></i>Comments</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="d-flex justify-content-between p-1 shadow-sm mb-1">
                                        <div>
                                            <strong>Rashed alam</strong>
                                            <br />
                                            <span>10/09/2022</span>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing
                                                elit.
                                            </p>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-primary" title="Running">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between p-1 shadow-sm mb-1">
                                        <div>
                                            <strong>Arafat islam</strong>
                                            <br />
                                            <span>10/11/2023</span>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing
                                                elit.
                                            </p>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-warning" title="Disabled">
                                                <i class="bi bi-eye-slash"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between p-1 shadow-sm mb-1">
                                        <div>
                                            <strong>Affan sekh</strong>
                                            <br />
                                            <span>30/09/2021</span>
                                            <br />
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing
                                                elit.
                                            </p>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-sm btn-primary" title="Running">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary mt-2"
                                        title="More Comments...">
                                        More...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Details News Modal End -->

    <!-- Delete Warning Modal Start-->
    <div class="modal fade" id="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong>Are You Sure You Wan't to Delete ?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Yes
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        No
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Details News Modal End -->
</div>
