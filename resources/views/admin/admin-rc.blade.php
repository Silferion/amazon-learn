<!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h5 class="fw-bold">
                <span class="text-muted fw-light text-primary"
                  >Consultations</span
                >
              </h5>

              <div class="card shadow-none">
                <div class="card-body">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('pending-consultations') }}"
                        ><i class="bx bx-loader"></i> Pending</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        href="{{ route('re-consultations') }}"
                        ><i class="bx bx-calendar-check"></i> Re-consultation</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('consulted') }}"
                        ><i class="bx bx-user-check"></i> Consulted</a
                      >
                    </li>
                  </ul>
                  <div class="table-responsive mb-4">
                    <table
                      id="example"
                      class="table table-sm"
                      style="width: 100%"
                    >
                      <thead
                        style="
                          background-color: rgb(209, 208, 207);
                          color: aliceblue !important;
                        "
                      >
                        <tr>
                          <th>Name</th>
                          <th>E-mail Address</th>
                          <th>VC ID</th>
                          <th>Consultation Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-start">
                              <div class="avatar me-2 mt-1">
                                <img
                                  src="assets/img/avatars/7.png"
                                  alt="Avatar"
                                  class="rounded-circle"
                                />
                              </div>
                              <h6 class="mt-3">Garrett Winters</h6>
                            </div>
                          </td>
                          <td>garrettwinters@gmail.com</td>
                          <td><i>live: garrettwinters</i></td>
                          <td>Feb 08 2023</td>
                          <td>
                            <button
                              type="button"
                              class="btn btn-md"
                              data-bs-toggle="modal"
                              data-bs-target="#forBillingModal"
                            >
                              <a
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Accept for Billing"
                              >
                                <i class="bx bx-wallet"></i>
                              </a>
                            </button>
                            <button
                              type="button"
                              class="btn btn-md"
                              data-bs-toggle="modal"
                              data-bs-target="#cancelModal"
                            >
                              <a
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Cancel"
                              >
                                <i class="bx bx-x"></i>
                              </a>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <hr class="my-5" />
            </div>
            <!--/ Content -->

            <div
              class="modal fade"
              id="forBillingModal"
              tabindex="-1"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel2">
                      <b>Accept for Billing?</b>
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                    <div class="dropdown-divider"></div>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">Name</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="Garrett Winters"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">E-mail</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="garrettwinters@gmail.com"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">VC ID</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="live:garrettwinters"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-3">
                        <label
                          class="form-label"
                          for="basic-icon-default-fullname"
                          >Select Package</label
                        >
                        <select class="form-select">
                          <option value="na" =""></option>
                          <option value="Package A">Package A |</option>
                          <option value="Package B">Package B |</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-warning">
                      Yes , accept.
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="modal fade"
              id="cancelModal"
              tabindex="-1"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel2">
                      <b>Are you sure you want to cancel?</b>
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">Name</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="Garrett Winters"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">E-mail</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="garrettwinters@gmail.com"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label">VC ID</label>
                        <input
                          type="text"
                          id="nameSmall"
                          class="form-control"
                          value="live:garrettwinters"
                          readonly
                        />
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-label-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-danger">
                      Yes, cancel.
                    </button>
                  </div>
                </div>
              </div>
            </div>