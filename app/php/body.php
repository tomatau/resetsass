<section id="main">
    <aside class="mob-5 tab-4 m-right">
        <section class="form" id="current-client">
            <header>
                <h3>Currently Client</h3>
            </header>
            <form action="">
                <dl>
                    <!-- <dt></dt> -->
                    <dd> <label for="client-selector">Name</label>
                    <select name="client-selector" 
                            id="client-selector">
                            <option value="">No Client</option>
                            <option value="f">Fake Client</option>
                        </select> </dd>
                </dl>
            </form>
        </section>
    </aside>
    
    <section id="of-projects" class="list mob-7 tab-8">
        <header>
            <h3>Client's Project</h3>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Project</th>
                    <th class="tabl-show-cell">Client</th>
                    <th class="tabl-show-cell">&#931; Tasks</th>
                    <th class="mob-show-cell">&#931; Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">There are no projects projects to display yet!</td>
                </tr>
            </tbody>
        </table>
    </section>

    <aside id="form-sidebar" class="mob-5 tab-4">
        <section class="form" id="add-project">
            <header>
                <h3>Add Project</h3>
            </header>
            <form action="">
                <fieldset>
                    <label for="project-name">Name</label>
                    <input type="text" 
                        id="project-name" name="project-name" 
                        placeholder="Project's Name">
                </fieldset>
                <fieldset>
                    <label for="project-name">Contact</label>
                    <input type="text" 
                        id="project-contact" name="project-contact" 
                        placeholder="Project's Contact">
                </fieldset>
                <button type="submit">Create</button>
            </form>
        </section>
        <section class="form" id="add-client">
            <header>
                <h3>Add Client</h3>
            </header>
            <form action="">
                <dl>
                    <dt>
                        <label for="client-name">Name</label>
                    </dt>
                    <dd>
                        <input type="text" name="name" id="client-name" placeholder="Client's Name">
                    </dd>
                    <dt>
                        <label for="client-email">Email</label>
                    </dt>
                    <dd>
                        <input type="text" name="email" id="client-email" placeholder="Client's Email">
                    </dd>
                    <dt></dt>
                    <dd>
                        <button type="submit" class="submit" name="create-client">Submit</button>
                    </dd>
                </dl>
            </form>
        </section>
    </aside>
</section>