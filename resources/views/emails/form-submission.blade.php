<!DOCTYPE html>
<html>
<head>
    <title>New Form Submission</title>
</head>
<body>
    <h2>New Form Submission</h2>

    <p>A new form submission has been received for the form: <strong>{{ $formData['form_type'] }}</strong></p>

    <h3>Submitted Data:</h3>

    <table class="table-auto w-full">
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Name: {{ $formData['name'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Email: {{ $formData['email'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Phone: {{ $formData['phone'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Reason: {{ $formData['reason'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Zip: {{ $formData['zip'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                City: {{ $formData['city'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                State: {{ $formData['state'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Country: {{ $formData['country'] }}
            </td>
        </tr>
        <tr class="border-b-2 border-slate-100">
            <td class="py-4 px-2">
                Message: {{ $formData['message'] }}
            </td>
        </tr>
    </table>  
</body>
</html>
