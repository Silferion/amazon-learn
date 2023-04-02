
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
                      <a class="nav-link active" href="{{ route('pending-consultations') }}"
                        ><i class="bx bx-loader"></i> Pending</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('re-consultations') }}"
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
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>tigernixon@gmail.com</td>
                          <td><i>live: tigernixon</i></td>
                          <td>Feb 06 2023</td>
                          <td>01:00 PM</td>

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
                              class="btn btn-sm"
                              data-bs-toggle="modal"
                              data-bs-target="#smallModal"
                            >
                              <a
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Re-consultation"
                              >
                                <i class="bx bx-calendar-check"></i>
                              </a>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>garrettwinters@gmail.com</td>
                          <td><i>live: garrettwinters</i></td>
                          <td>Feb 06 2023</td>
                          <td>02:00 PM</td>

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
                              class="btn btn-sm"
                              data-bs-toggle="modal"
                              data-bs-target="#smallModal"
                            >
                              <a
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Re-consultation"
                              >
                                <i class="bx bx-calendar-check"></i>
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
                          <option value="na"></option>
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
                    <button type="button" class="btn btn-warning">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="modal fade"
              id="smallModal"
              tabindex="-1"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">
                      For Re-consultation
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
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nameSmall" class="form-label"
                          >Re-Schedule</label
                        >
                        <input
                          type="date"
                          id="nameSmall"
                          class="form-control"
                        />
                      </div>
                      <div class="col mb-3">
                        <input
                          type="time"
                          id="nameSmall"
                          class="form-control"
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
                    <button type="button" class="btn btn-primary">
                      Set Next Schedule
                    </button>
                  </div>
                </div>
              </div>
            </div>
