namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Room;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class LoanScheduleController extends Controller
{
    public function showForm()
    {
        $buildings = Building::all();
        return view('loan-form', compact('buildings'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:15',
            'fakultas' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'ruangan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'jam_mulai' => 'required',
            'tanggal_selesai' => 'required|date',
            'jam_selesai' => 'required',
            'surat_izin_kegiatan' => 'required|file',
            'keterangan' => 'required|string',
        ]);

        // Store the file
        $filePath = $request->file('surat_izin_kegiatan')->store('activity_letters');

        // Create a new schedule
        $schedule = new Schedule();
        $schedule->admin_id = Auth::guard('admin')->id();
        $schedule->user_id = Auth::id();
        $schedule->building_id = $request->gedung;
        $schedule->room_id = $request->ruangan;
        $schedule->loan_start_date = $request->tanggal_mulai;
        $schedule->loan_end_date = $request->tanggal_selesai;
        $schedule->start_time = $request->jam_mulai;
        $schedule->end_time = $request->jam_selesai;
        $schedule->activity_letter = $filePath;
        $schedule->purpose = $request->keterangan;
        $schedule->status_id = 'pending'; // Set default status

        $schedule->save();

        // Redirect with success message
        return redirect()->route('loan.form')->with('success', 'Form peminjaman berhasil disimpan!');
    }
}
