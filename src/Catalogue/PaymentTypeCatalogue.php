<?php

namespace Towoju5\STP\Catalogue;

class PaymentTypeCatalogue
{
    const REFUNDS = 0;
    const THIRD_TO_THIRD = 1;
    const PARTICIPANT_TO_THIRD = 5;
    const EXTEMPORANEOUS_REFUND = 16;
    const RETURN = 17;
    const EXTEMPORANEOUS_RETURN = 18;
    const ONE_TIME_FACE_TO_FACE_COLLECTION = 19;
    const ONE_TIME_COLLECTION = 20;
    const RECURRING_COLLECTIONS = 21;
    const RECURRING_AND_NON_RECURRING_THIRD_PARTY = 22;
    const SPECIAL_RETURN = 23;
    const SPECIAL_EXTEMPORANEOUS_RETURN = 24;
    const INDIRECT_THIRD_TO_THIRD = 30;
    const INBOUND_REMITTANCE = 36;
}
