@extends('layouts.front')

@section('meta-info')
<title>Fee Structure | Aeren College of Education</title>
<meta name="description" content="Complete fee structure for B.Ed program at Aeren College of Education - tuition fees, other charges, and payment details.">
@endsection

@section('main-body')

<!-- Hero Section -->
<section>
    <div class="banner fees-bg d-flex align-items-center">
        <div data-aos="fade-up" data-aos-delay="200" class="text-center">
            <h1 class="text-white mb-3 fw-light">
                Fee Structure
            </h1>
            <p class="text-white lead">Transparent and Affordable Education</p>
        </div>
    </div>
</section>

<!-- Main Fee Structure -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">B.Ed Program Fee Structure 2024-2026
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
            <p class="text-muted">As per University of Mumbai and Government of Maharashtra guidelines</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="fee-card p-4 rounded-4 shadow-sm bg-white">
                    <!-- Annual Fee Breakdown -->
                    <div class="annual-fee mb-5">
                        <h4 class="text-primary mb-4 text-center">Annual Fee Breakdown (Per Year)</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Particulars</th>
                                        <th class="text-center">Amount (₹)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-school text-primary me-2"></i>
                                                Tuition Fee
                                            </div>
                                        </td>
                                        <td class="text-center">25,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-building text-primary me-2"></i>
                                                Development Fee
                                            </div>
                                        </td>
                                        <td class="text-center">5,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-book text-primary me-2"></i>
                                                Library Fee
                                            </div>
                                        </td>
                                        <td class="text-center">2,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-microscope text-primary me-2"></i>
                                                Laboratory Fee
                                            </div>
                                        </td>
                                        <td class="text-center">3,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-clipboard-text text-primary me-2"></i>
                                                Examination Fee
                                            </div>
                                        </td>
                                        <td class="text-center">2,500</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-activity text-primary me-2"></i>
                                                Other Charges
                                            </div>
                                        </td>
                                        <td class="text-center">2,500</td>
                                    </tr>
                                    <tr class="table-primary fw-bold">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <i class="ti ti-calculator text-white me-2"></i>
                                                Total Annual Fee
                                            </div>
                                        </td>
                                        <td class="text-center">40,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Total Program Fee -->
                    <div class="total-program-fee text-center p-4 rounded-3 mb-4" style="background: rgba(34, 85, 128, 0.1);">
                        <h4 class="text-primary mb-2">Total Program Fee (2 Years)</h4>
                        <div class="display-4 fw-bold text-primary">₹ 80,000</div>
                        <p class="text-muted mb-0">Payable in 2 annual installments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Charges -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">Additional Charges
                <div class="position-absolute bg-primary rounded"
                    style="width: 80px; height: 5px; bottom: 0; left: 50%; transform: translateX(-50%);">
                </div>
            </h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="charge-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <div class="charge-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-file-certificate fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Admission Form</h5>
                    <div class="charge-amount mb-3">
                        <span class="h4 fw-bold text-primary">₹ 500</span>
                    </div>
                    <p class="text-muted small mb-0">One-time non-refundable application fee</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="charge-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <div class="charge-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-id-badge fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Identity Card</h5>
                    <div class="charge-amount mb-3">
                        <span class="h4 fw-bold text-primary">₹ 200</span>
                    </div>
                    <p class="text-muted small mb-0">One-time charge for student ID card</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="charge-card text-center p-4 rounded-4 shadow-sm border h-100">
                    <div class="charge-icon mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                         style="width: 70px; height: 70px;">
                        <i class="ti ti-credit-card fs-2"></i>
                    </div>
                    <h5 class="text-primary mb-3">Caution Money</h5>
                    <div class="charge-amount mb-3">
                        <span class="h4 fw-bold text-primary">₹ 1,000</span>
                    </div>
                    <p class="text-muted small mb-0">Refundable at the end of the program</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Information -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold text-primary mb-4 position-relative pb-3">
                    Payment Information
                    <div class="position-absolute bottom-0 start-0 bg-primary rounded"
                        style="width: 80px; height: 5px;"></div>
                </h2>

                <div class="payment-info">
                    <div class="payment-point d-flex align-items-start mb-4">
                        <div class="payment-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                            style="width: 40px; height: 40px;">
                            <i class="ti ti-calendar"></i>
                        </div>
                        <div>
                            <h6 class="text-primary mb-1">Payment Schedule</h6>
                            <p class="text-muted small mb-0">Fees to be paid at the beginning of each academic year</p>
                        </div>
                    </div>

                    <div class="payment-point d-flex align-items-start mb-4">
                        <div class="payment-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                            style="width: 40px; height: 40px;">
                            <i class="ti ti-discount"></i>
                        </div>
                        <div>
                            <h6 class="text-primary mb-1">Scholarships</h6>
                            <p class="text-muted small mb-0">Available for eligible students as per government norms</p>
                        </div>
                    </div>

                    <div class="payment-point d-flex align-items-start mb-4">
                        <div class="payment-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                            style="width: 40px; height: 40px;">
                            <i class="ti ti-receipt-tax"></i>
                        </div>
                        <div>
                            <h6 class="text-primary mb-1">Tax Benefits</h6>
                            <p class="text-muted small mb-0">Education fee eligible for tax deduction under Section 80C</p>
                        </div>
                    </div>

                    <div class="payment-point d-flex align-items-start">
                        <div class="payment-icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0"
                            style="width: 40px; height: 40px;">
                            <i class="ti ti-currency-rupee"></i>
                        </div>
                        <div>
                            <h6 class="text-primary mb-1">Payment Modes</h6>
                            <p class="text-muted small mb-0">Cash, Cheque, Demand Draft, Online Transfer, UPI</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="payment-methods-card p-4 rounded-4 shadow-sm bg-white">
                    <h4 class="text-primary mb-4 text-center">Accepted Payment Methods</h4>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-cash text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Cash</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-checkbox text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Cheque</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-file-invoice text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Demand Draft</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-device-laptop text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Online Transfer</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-qrcode text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">UPI</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="method-card text-center p-3 rounded-3 border">
                                <i class="ti ti-credit-card text-primary fs-1 mb-2 d-block"></i>
                                <span class="text-primary fw-semibold">Debit/Credit Card</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection