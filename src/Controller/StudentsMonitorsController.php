<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;


/**
 * StudentsMonitors Controller
 *
 * @property \App\Model\Table\StudentsMonitorsTable $StudentsMonitors
 *
 * @method \App\Model\Entity\StudentsMonitor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsMonitorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $studentsMonitors = $this->paginate($this->StudentsMonitors);

        $this->set(compact('studentsMonitors'));
    }

    /**
     * View method
     *
     * @param string|null $id Students Monitor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentsMonitor = $this->StudentsMonitors->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('studentsMonitor', $studentsMonitor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentsMonitor = $this->StudentsMonitors->newEntity();
        if ($this->request->is('post')) {
            $studentsMonitor = $this->StudentsMonitors->patchEntity($studentsMonitor, $this->request->getData());
            $studentsMonitor->student_id = $this->Auth->user('id');
            if ($this->StudentsMonitors->save($studentsMonitor)) {
                $this->Flash->success(__('The students monitor has been saved.'));
               $estudante = $this->StudentsMonitors->get($studentsMonitor->id
                );
                  $email = new Email('default');
                  $email->from(['testezerozerosete@gmail.com' => 'PROVA'])
                     ->to($estudante['email'])
                     ->subject('BEM VINDO USUARIO')
                     ->send('AGEDAMENTO REALIZADO  COM SUCESSO ');


                return $this->redirect(['action' => 'index'])
                ;
            }
            $this->Flash->error(__('The students monitor could not be saved. Please, try again.'));
        }
        $monitors = $this->StudentsMonitors->Users->find('list', ['limit' => 200])->
        where(['Users.role'=> 'Monitor']);
        $this->set(compact('studentsMonitor', 'monitors'));
        // $this->set(compact('studentsMonitor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Students Monitor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentsMonitor = $this->StudentsMonitors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentsMonitor = $this->StudentsMonitors->patchEntity($studentsMonitor, $this->request->getData());
            if ($this->StudentsMonitors->save($studentsMonitor)) {
                $this->Flash->success(__('The students monitor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The students monitor could not be saved. Please, try again.'));
        }
        $users = $this->StudentsMonitors->Users->find('list', ['limit' => 200]);
        $this->set(compact('studentsMonitor', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Students Monitor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentsMonitor = $this->StudentsMonitors->get($id);
        if ($this->StudentsMonitors->delete($studentsMonitor)) {
            $this->Flash->success(__('The students monitor has been deleted.'));
        } else {
            $this->Flash->error(__('The students monitor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
